<?php

class ContactUsController extends BaseController
{
    /**
     * Contact us page.
     *
     * @return View
     */
    public function getIndex()
    {
        return View::make('frontend/contact-us');
    }

    /**
     * Contact us form processing page.
     *
     * @return Redirect
     */
    public function postIndex()
    {
        // Declare the rules for the form validation
        $rules = array(
            'name'        => 'required|min:2',
            'email'       => 'required|email',
            'description' => 'required',
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make(Input::all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            return Redirect::route('contact-us')->withInput()->withErrors($validator);
        }

        # TODO !
    }

}