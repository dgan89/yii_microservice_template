<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 21.11.2021
 * Time: 16:09
 */

namespace app\controllers;


use Swagger\Annotations as SWG;
use yii\web\Controller;

/**
 * @SWG\Swagger(
 *     basePath="/",
 *     produces={"application/json"},
 *     consumes={"application/x-www-form-urlencoded"},
 *     @SWG\Info(version="1.0", title="Simple API"),
 * )
 */
class SwController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * @SWG\Get(path="/user",
     *     tags={"User"},
     *     summary="Retrieves the collection of User resources.",
     *     @SWG\Response(
     *         response = 200,
     *         description = "User collection response"
     *     ),
     * )
     */
    public function actionIndex()
    {
        return [];
    }
}