<?php
// src/PlannerBundle/Entity/User.php

namespace PlannerBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="PlannerBundle\Entity\Task",mappedBy="user")
     */
    private $tasks;

    /**
     * @ORM\OneToMany(targetEntity="PlannerBundle\Entity\Category",mappedBy="user")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="PlannerBundle\Entity\Comment",mappedBy="user")
     */
    private $comments;

    public function __construct()
    {
        parent::__construct();
    }
}