<?php declare(strict_types=1);
/**
 * This file is part of the Darkstar PHP SDK.
 *
 * @version v0.1.0 Initial Release
 * @license The MIT License, http://opensource.org/licenses/MIT
 *
 * @filesource
 */
namespace Darkstar\Ravino\Miner;

use Darkstar\Ravino\Block\BlockInterface;


/**
 * Interface ProofOfWorkBlockInterface
 * @package Darkstar\Ravino\Miner
 */
interface ProofOfWorkBlockInterface extends BlockInterface
{
    /**
     * @return int|null
     */
    public function getNonce(): ?int;

    /**
     * @param int $nonce
     */
    public function setNonce(int $nonce): void;
}
