<?php


namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Smoke test of all public and secure URLs of the application
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * @dataProvider getPublicUrls
     * @param string $url
     */
    public function testPublicUrls(string $url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);

        $this->assertResponseIsSuccessful();
    }

    /**
     * @dataProvider getSecureUrls
     * @param string $url
     */
    public function testSecureUrls(string $url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);

        $this->assertResponseRedirects('/login');
    }

    public function getPublicUrls(): ?\Generator
    {
        yield ['/'];
    }

    public function getSecureUrls(): ?\Generator
    {
    }
}