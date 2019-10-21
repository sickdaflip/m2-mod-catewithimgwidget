<?php
\Magento\Framework\Component\ComponentRegistrar::register(
        \Magento\Framework\Component\ComponentRegistrar::MODULE,
        'Sickmage_CatewithimgWidget',
        isset($file) ? dirname($file) : __DIR__
    );