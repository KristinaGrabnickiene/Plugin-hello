<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;

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

		return json_encode($orders);
	}
}