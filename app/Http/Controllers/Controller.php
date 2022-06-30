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
 *      description="APIs APP Terceiro tempo Resenha FC. Sumula, Escalação, cadastro de jogadores. Desenvolvido por: Peterson Macedo e Alex Buttiele",
 *      @OA\Contact(
 *          name="Peterson Macedo",
 *          url="http://petersonmacedo.com.br",
 *          email="petersondmb@gmail.com"
 *      )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
