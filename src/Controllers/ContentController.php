<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Shipping\Countries\Contracts\OrderRepositoryContract;


/**
 * Class ContentController
 * @package HelloWorld\Controllers
 */
class ContentController extends Controller
{
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function load(OrderRepositoryContract $orderRepo)
	{
		$orders = $orderRepo->searchOrders();
		$country = $orderRepo->getActiveCountriesList():Collection;

		return json_encode($orders, $country);
	}
}