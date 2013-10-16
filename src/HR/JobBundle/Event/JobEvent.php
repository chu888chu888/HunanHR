<?php
namespace HR\JobBundle\Event;
use HR\JobBundle\Model\JobInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * @author Wenming Tang <tang@babyfamily.com>
 */
class JobEvent extends Event
{
    private $job;

    public function __construct(JobInterface $job)
    {
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;
    }
}