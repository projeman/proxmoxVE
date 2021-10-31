<?php
/*
 * @copyright 2021 Daniel Engelschalk <hello@mrkampf.com>
 */

namespace Proxmox\Api\Nodes\Node\Qemu\VmId\Agent;

use Proxmox\Helper\PVEPathClassBase;
use Proxmox\PVE;

/**
 * Class GetVcpus
 * @package Proxmox\Api\Nodes\Node\Qemu\VmId\Agent
 */
class GetVcpus extends PVEPathClassBase
{
    /**
     * Init constructor.
     * @param PVE $pve
     * @param string $parentAdditional
     */
    public function __construct(PVE $pve, string $parentAdditional)
    {
        parent::__construct($pve, $parentAdditional . 'get-vcpus/');
    }

    /**
     * Execute get-vcpus.
     * @link https://pve.proxmox.com/pve-docs/api-viewer/#/nodes/{node}/qemu/{vmid}/agent/get-vcpus
     * @return array|null
     */
    public function get(): ?array
    {
        return $this->getPve()->getApi()->get($this->getPathAdditional());
    }
}