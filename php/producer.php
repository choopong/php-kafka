<?php

$rk = new RdKafka\Producer();
$rk->setLogLevel(LOG_DEBUG);
$rk->addBrokers("kafka");

$topic = $rk->newTopic("test");

$topic->produce(RD_KAFKA_PARTITION_UA, 0, "Message payload");
