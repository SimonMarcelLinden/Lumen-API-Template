<?php

if (! function_exists('responseFromCode')) {
    /**
     * Throw an HttpException with the given data.
     *
     * @param  int     $code
     * @param  array   $data
     * @param  array   $custom_headers
     * @return void
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    function responseFromCode($code, $data = [], $custom_headers = []) {

        $default_headers = [];
        $merged_headers = array_merge($default_headers, $custom_headers);

        $response = config('responseMap.' . $code);
        if ( empty( $response )) {
            return response()->json(['code' => 100001], 501);
        }

        $responseObject = [
            'code' => $code,
        ];

        if ( env('APP_DEBUG', false) ) {
            $responseObject['detail'] = $response['detail'];

            if ( ! empty( $error )) {
                $responseObject['error'] = $error;
            }
        }

        if ( ! empty( $data )) {
            if ( $response['status'] < 400 ) {
                $responseObject['data'] = $data;
            } else if ( env('APP_DEBUG', false) ) {
                $responseObject['error'] = $data;
            }
        }

        if ( ! empty( $response['localized'] ) ) {

            $lang = 'de';

            if ( ! empty($response['localized'][$lang]) ) {
                $responseObject['localized'] = $response['localized'][$lang];
            }

        }

        return response()->json(
            $responseObject,
            $response['status'],
            $merged_headers
        );
    }
}
