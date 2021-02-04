<?php


namespace Acme;


class Handler
{
    /** @var Lorem */
    private $lorem;
    /** @var Ipsum */
    private $ipsum;

    public function __construct(Lorem $lorem, Ipsum $ipsum)
    {
        $this->lorem = $lorem;
        $this->ipsum = $ipsum;
    }

    public function handle()
    {
        $loremResponse = $this->lorem->loremHandle();

        $this->ipsum->ipsumHandle($loremResponse);
    }
}
