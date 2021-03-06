<?php

/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Eugenia Schneider <eugenia@werstreamt.es>
 * @copyright (c) 2018, Eugenia Schneider
 * @version 4.0.0
 */

require_once '../../../vendor/autoload.php';
require_once '../../apikey.php';

/** @var Tmdb\Client $client **/
$client = require_once('../../setup-client.php');
$recommendedMovies = $client->getMoviesApi()->getRecommendations(87421);

var_dump($recommendedMovies);
