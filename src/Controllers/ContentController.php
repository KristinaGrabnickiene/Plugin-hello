<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Modules\Order\Shipping\Countries\Contracts\CountryRepositoryContract;


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

		$countryRepo = pluginApp(CountryRepositoryContract::class);
		$orders = $orderRepo->searchOrders();
		$countries = $countryRepo->getCountriesList(0, ['states', 'names']);
	

		

		// return json_encode([
		// 	$orders, 
		// 	$countries
		// ]);

		return json_encode([
			'orders' => $orders, 
			'countries'=> $countries
		]);
	}

	// public function modelToArray($value)
	// {
	// 	return json_decode(json_encode($value));
	// }
}