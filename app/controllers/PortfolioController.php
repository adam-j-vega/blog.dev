<?

//controller for Portfolio

class PortfolioController extends BaseController 
{
	public function showPortfolio()
	{
		return View::make('portfolio');
	}
}

?>