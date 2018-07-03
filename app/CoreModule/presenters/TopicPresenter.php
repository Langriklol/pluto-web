<?php

namespace App\CoreModule\Presenters;
use Nette;
use App\Presenters\BasePresenter;
use App\CoreModule\Model\TopicManager;

class TopicPresenter extends BasePresenter
{
    /** @var TopicManager */
    private $manager;

    /** @param TopicManager $manager */
    public function __construct(TopicManager $manager)
    {
        $this->manager = manager;
    }

    /**@param int $id */
    public function renderDefault(int $id)
    {
        $this->template->topic = $this->manager->getTopic($id);
    }
}