<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="title", type="string", example="Some title"),
 *             @OA\Property(property="likes", type="integer", example=20)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=20)
 *             )
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Список постов",
 *     tags={"Post"},
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="data", type="array",
 *                 @OA\Items(
 *                     @OA\Property(property="id", type="integer", example=1),
 *                     @OA\Property(property="title", type="string", example="Some title"),
 *                     @OA\Property(property="likes", type="integer", example=20)
 *                 )
 *             )
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Единичный пост",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         name="post",
 *         in="path",
 *         required=true,
 *         description="ID поста",
 *         @OA\Schema(type="integer"),
 *         example=3
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=20)
 *             )
 *         )
 *     )
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Обновление поста",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         name="post",
 *         in="path",
 *         required=true,
 *         description="ID поста",
 *         @OA\Schema(type="integer"),
 *         example=3
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="title", type="string", example="Updated title"),
 *             @OA\Property(property="likes", type="integer", example=25)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="title", type="string", example="Updated title"),
 *                 @OA\Property(property="likes", type="integer", example=25)
 *             )
 *         )
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Удаление поста",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         name="post",
 *         in="path",
 *         required=true,
 *         description="ID поста",
 *         @OA\Schema(type="integer"),
 *         example=3
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="Post deleted successfully")
 *         )
 *     )
 * )
 */
class PostController extends Controller
{
}
