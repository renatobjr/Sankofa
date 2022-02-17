<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\TabelasAuxiliares;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form','url'];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // get content for auxiliar tables
        $tabelaAuxiliar = new TabelasAuxiliares();
        // Booleana select
        $this->data['selectBooleana'] = $tabelaAuxiliar->getBooleana();
        // Etnia select
        $this->data['selectEtnia'] = $tabelaAuxiliar->getEtnia();
        // Etnia select
        $this->data['selectSexo'] = $tabelaAuxiliar->getSexo();
        // UF select
        $this->data['selectUF'] = $tabelaAuxiliar->getUf();
        // Nivel escolaridade select
        $this->data['selectNivelEscolaridade'] = $tabelaAuxiliar->getNivelEscolaridade();
        // Turno select
        $this->data['selectTurno'] = $tabelaAuxiliar->getTurno();
        // Tipo Moradia select
        $this->data['selectTipoMoradia'] = $tabelaAuxiliar->getTipoMoradia();
        // Turmas select
        $this->data['selectTurmas'] = $tabelaAuxiliar->getTurma();

        $this->session = \Config\Services::session();
    }
}
