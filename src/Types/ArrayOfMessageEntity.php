<?php


namespace balePhp\Types;


abstract class ArrayOfMessageEntity
{
    public static function create($data)
    {
        $arrayOfMessageEntity = [];
        foreach ($data as $messageEntity) {
            $arrayOfMessageEntity[] = MessageEntity::create($messageEntity);
        }

        return $arrayOfMessageEntity;
    }
}