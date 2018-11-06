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
		

		foreach($orders as $order){
		$id = $order['id'];
		}
		
	

		return json_encode($orders);
	}
}