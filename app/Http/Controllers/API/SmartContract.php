<?php


namespace App\Http\Controllers\API;


use App\Services\BscScanService;
use App\Services\Web3Service;
use Illuminate\Http\Request;

class SmartContract extends BaseController
{
    protected $webService;

    /**
     * UpdateScore constructor.
     * @param $webService
     */
    public function __construct(Web3Service $webService)
    {
        $this->webService = $webService;
    }
    public function getABI(Request $request){
        $abis=BscScanService::getContratABI(env('BSCAN_ADDRESS'));
        return $this->sendResponse($abis, 'request successfully.');
    }
    function contract(Request $request){
        $this->webService->AddressToID("0x77Fd63a360918A27451Dd23d1705Eb7afc3A6087");
        return $this->sendResponse([], 'request successfully.');
    }
}
