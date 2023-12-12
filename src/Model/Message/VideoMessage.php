<?php

namespace Tustin\PlayStation\Model\Message;

use Tustin\PlayStation\Model\Media;
use Tustin\PlayStation\Enum\MessageType;
use Tustin\PlayStation\Model\Message\AbstractMessage;

class VideoMessage extends AbstractMessage
{
    /**
     * Gets the video media.
     */
    public function video(): Media
    {
        return new Media(
            $this->messageThread()->getHttpClient(), 
            $this->pluck('messageDetail.videoMessageDetail.ugcId')
        );
    }

    /**
     * Gets the message type.
     */
    public function type(): MessageType
    {
        return MessageType::Video;
    }

    public function fetch(): object
    {
        throw new \BadMethodCallException();
    }
}
