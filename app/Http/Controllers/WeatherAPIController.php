<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWeatherAPIRequest;
use App\Http\Requests\UpdateWeatherAPIRequest;
use App\Repositories\WeatherAPIRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WeatherAPIController extends AppBaseController
{
    /** @var  WeatherAPIRepository */
    private $weatherAPIRepository;

    public function __construct(WeatherAPIRepository $weatherAPIRepo)
    {
        $this->weatherAPIRepository = $weatherAPIRepo;
    }

    /**
     * Display a listing of the WeatherAPI.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $weatherAPIs = $this->weatherAPIRepository->all();

        return view('weather_a_p_is.index')
            ->with('weatherAPIs', $weatherAPIs);
    }

    /**
     * Show the form for creating a new WeatherAPI.
     *
     * @return Response
     */
    public function create()
    {
        return view('weather_a_p_is.create');
    }

    /**
     * Store a newly created WeatherAPI in storage.
     *
     * @param CreateWeatherAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWeatherAPIRequest $request)
    {
        $input = $request->all();

        $weatherAPI = $this->weatherAPIRepository->create($input);

        Flash::success('Weather A P I saved successfully.');

        return redirect(route('weatherAPIs.index'));
    }

    /**
     * Display the specified WeatherAPI.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $weatherAPI = $this->weatherAPIRepository->find($id);

        if (empty($weatherAPI)) {
            Flash::error('Weather A P I not found');

            return redirect(route('weatherAPIs.index'));
        }

        return view('weather_a_p_is.show')->with('weatherAPI', $weatherAPI);
    }

    /**
     * Show the form for editing the specified WeatherAPI.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $weatherAPI = $this->weatherAPIRepository->find($id);

        if (empty($weatherAPI)) {
            Flash::error('Weather A P I not found');

            return redirect(route('weatherAPIs.index'));
        }

        return view('weather_a_p_is.edit')->with('weatherAPI', $weatherAPI);
    }

    /**
     * Update the specified WeatherAPI in storage.
     *
     * @param int $id
     * @param UpdateWeatherAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWeatherAPIRequest $request)
    {
        $weatherAPI = $this->weatherAPIRepository->find($id);

        if (empty($weatherAPI)) {
            Flash::error('Weather A P I not found');

            return redirect(route('weatherAPIs.index'));
        }

        $weatherAPI = $this->weatherAPIRepository->update($request->all(), $id);

        Flash::success('Weather A P I updated successfully.');

        return redirect(route('weatherAPIs.index'));
    }

    /**
     * Remove the specified WeatherAPI from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $weatherAPI = $this->weatherAPIRepository->find($id);

        if (empty($weatherAPI)) {
            Flash::error('Weather A P I not found');

            return redirect(route('weatherAPIs.index'));
        }

        $this->weatherAPIRepository->delete($id);

        Flash::success('Weather A P I deleted successfully.');

        return redirect(route('weatherAPIs.index'));
    }
}
