<?php 
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Order;
class ViewData {
//    protected $param;

  /**
   * Create a new  composer.
   * @return void
   */
  public function __construct() {
    // Dependencies automatically resolved by service container...
  }

  /**
   * Bind data to the view.
   *
   * @param  View  $view
   * @return void
   */
  public function compose(View $view) {
    $gmt7 = "7" * 60 * 60;
    $today = gmdate("Y-m-d", time() + $gmt7);

    $order = Order::where('ngayGiao','=',$today)->with('product','customer','status')->count();
    $view->with('testVariable', $order);
  }
}