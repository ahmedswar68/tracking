<?php


namespace App\Repositories;


use App\Models\Conversion;
use App\Repositories\Interfaces\ConversionRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ConversionRepository implements ConversionRepositoryInterface
{
  public static $customerId = 123;
  /**
   * @var Model
   */
  protected $model;

  /**
   * BaseRepository constructor.
   *
   * @param Conversion $model
   */
  public function __construct(Conversion $model)
  {
    $this->model = $model;
  }

  /**
   * this function for distribute revenue among all platforms that exist in the static Cookie
   * this insert this distribute revenue for each platform with customer ID and booking number
   */
  public function distributeRevenue(int $customerId, string $bookingNumber, int $revenue, string $cookie): bool
  {
    $cookie = json_decode($cookie, true);

    if (is_array($cookie) && key_exists('placements', $cookie)) {
      $placements = $cookie['placements'];
    } else {
      return false;
    }
    if (!is_array($placements))
      return false;

    // get avg for every platform
    $revenueShare = floor(($revenue / count($placements)));
    // loop through placements and insert them into DB
    $insertedData = [];
    foreach ($placements as $placement) {
      if ($placement['customer_id'] !== self::$customerId) {
        return false;
      }
      $insertedData[] = [
        'customer_id' => $customerId,
        'booking_number' => $bookingNumber,
        'revenue' => $revenueShare,
        'platform' => $placement['platform'],
        'date_of_contact' => $placement['date_of_contact'],
      ];

    }

    return $this->createConversion($insertedData);

  }

  /**
   * return most attracted platform
   */
  public function getMostAttractedPlatform()
  {
    return Conversion::select(DB::raw('count(platform) as platform_count'), 'platform')
      ->groupBy('platform')
      ->orderBy(DB::raw('count(platform)'), 'DESC')
      ->first();

  }

  /**
   * return sum of conversion for specific platform
   * @return int
   */
  public function getPlatformRevenue(string $platform): int
  {
    return (int)Conversion::where('platform', $platform)->sum('revenue');
  }

  /**
   * return count of conversion for specific platform
   * @return int
   */
  public function getPlatformConversions(string $platform): int
  {
    return Conversion::where('platform', $platform)->get()->count();
  }

  /**
   * create multiple records
   */
  private function createConversion(array $data): bool
  {
    return $this->model->insert($data);
  }
}