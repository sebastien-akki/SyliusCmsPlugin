<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\MediaProvider;

use BitBag\SyliusCmsPlugin\Entity\MediaInterface;

interface ProviderInterface
{
    public function getTemplate(): string;

    public function render(MediaInterface $media, ?string $template = null, array $options = []): string;

    public function upload(MediaInterface $media): void;
}
