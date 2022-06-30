<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Terceiro Tempo Resenha",
 *      description="APIs APP Terceiro tempo Resenha FC. Sumula, Escalação, cadastro de jogadores",
 *      @OA\Contact(
 *          name="Peterson Macedo",
 *          url="http://petersonmacedo.com.br",
 *          email="petersondmb@gmail.com"
 *      ),
 *      @OA\Contact(
 *          name="Alex Buttiele", 
 *          email="alexbuttiele@gmail.com"
 *      )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
