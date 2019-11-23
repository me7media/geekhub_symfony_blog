<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PermissionRepository")
 */
class Permission
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $entity;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Role", inversedBy="permissions")
     */
    private $role_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $access;

    /**
     * @ORM\Column(type="boolean")
     */
    private $view;

    /**
     * @ORM\Column(type="boolean")
     */
    private $creating;

    /**
     * @ORM\Column(type="boolean")
     */
    private $edit;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deleting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getRoleId(): ?Role
    {
        return $this->role_id;
    }

    public function setRoleId(?Role $role_id): self
    {
        $this->role_id = $role_id;

        return $this;
    }

    public function getAccess(): ?bool
    {
        return $this->access;
    }

    public function setAccess(bool $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getView(): ?bool
    {
        return $this->view;
    }

    public function setView(bool $view): self
    {
        $this->view = $view;

        return $this;
    }

    public function getCreating(): ?bool
    {
        return $this->creating;
    }

    public function setCreating(bool $creating): self
    {
        $this->creating = $creating;

        return $this;
    }

    public function getEdit(): ?bool
    {
        return $this->edit;
    }

    public function setEdit(bool $edit): self
    {
        $this->edit = $edit;

        return $this;
    }

    public function getDeleting(): ?bool
    {
        return $this->deleting;
    }

    public function setDeleting(bool $deleting): self
    {
        $this->deleting = $deleting;

        return $this;
    }
}
