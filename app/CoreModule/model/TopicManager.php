<?php

namespace App\CoreModule\Model;

use Nette\Database\Context;

class TopicManager
{

    const TOPIC_TABLE = 'topic',
        TOPIC_ID = 'topic_id';

    /** @var Context $context Database context*/
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    /**
     * @param int $id
     * @return ActiveRow
     */
    public function getTopic(int $id): ActiveRow
    {
        return $this->context->table(self::TOPIC_TABLE)->where(self::TOPIC_TABLE, $id)->fetch();
    }
}