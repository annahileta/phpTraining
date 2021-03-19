<?php

    interface Handler
    {
        public function handle($context): bool;
    }