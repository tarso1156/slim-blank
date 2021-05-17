<?php declare(strict_types=1);

namespace Gepanel\Middleware;

use Gepanel\Auth\Token\JWTToken;
use Gepanel\HttpStatusCode;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class AuthMiddleware
{
    
    public function __invoke(Request $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $token = $request->getHeaderLine("Authorization");
        $token = explode("Bearer ", $token)[1];

        $tokenParser = new JWTToken();
        $isTokenValid = $tokenParser->validate($token);
        
        if (!$isTokenValid) {
            return new Response(HttpStatusCode::UNAUTHORIZED);
        }

        return $handler->handle($request);
    }
}