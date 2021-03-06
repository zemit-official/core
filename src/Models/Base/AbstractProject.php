<?php

/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * --------------------------------------------------------------
 *
 * New BSD License
 *
 * Copyright (c) 2017-present, Zemit CMS Team
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the Zemit nor the
 *       names of its contributors may be used to endorse or promote products
 *       derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL ZEMIT FRAMEWORK TEAM BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Zemit\Models\Base;

/**
 * AbstractProject
 * 
 * @package Zemit\Models\Base
 * @autogenerated by Phalcon Developer Tools
 * @date 2020-07-12, 19:34:00
 */
abstract class AbstractProject extends \Zemit\Models\Base
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=10, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(column="locale_id", type="integer", length=10, nullable=true)
     */
    protected $localeId;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=120, nullable=false)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(column="slug", type="string", length=120, nullable=false)
     */
    protected $slug;

    /**
     *
     * @var string
     * @Column(column="description", type="string", nullable=true)
     */
    protected $description;

    /**
     *
     * @var string
     * @Column(column="meta", type="string", nullable=true)
     */
    protected $meta;

    /**
     *
     * @var string
     * @Column(column="created_at", type="string", nullable=false)
     */
    protected $createdAt;

    /**
     *
     * @var string
     * @Column(column="updated_at", type="string", nullable=true)
     */
    protected $updatedAt;

    /**
     *
     * @var string
     * @Column(column="deprecated_at", type="string", nullable=true)
     */
    protected $deprecatedAt;

    /**
     *
     * @var string
     * @Column(column="deleted_at", type="string", nullable=true)
     */
    protected $deletedAt;

    /**
     *
     * @var string
     * @Column(column="deprecated", type="string", length=1, nullable=false)
     */
    protected $deprecated;

    /**
     *
     * @var string
     * @Column(column="deleted", type="string", length=1, nullable=false)
     */
    protected $deleted;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field locale_id
     *
     * @param integer $localeId
     * @return $this
     */
    public function setLocaleId($localeId)
    {
        $this->localeId = $localeId;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field slug
     *
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field meta
     *
     * @param string $meta
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;

        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Method to set the value of field updated_at
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Method to set the value of field deprecated_at
     *
     * @param string $deprecatedAt
     * @return $this
     */
    public function setDeprecatedAt($deprecatedAt)
    {
        $this->deprecatedAt = $deprecatedAt;

        return $this;
    }

    /**
     * Method to set the value of field deleted_at
     *
     * @param string $deletedAt
     * @return $this
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Method to set the value of field deprecated
     *
     * @param string $deprecated
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * Method to set the value of field deleted
     *
     * @param string $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field localeId
     *
     * @return integer
     */
    public function getLocaleId()
    {
        return $this->localeId;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field meta
     *
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Returns the value of field createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Returns the value of field updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Returns the value of field deprecatedAt
     *
     * @return string
     */
    public function getDeprecatedAt()
    {
        return $this->deprecatedAt;
    }

    /**
     * Returns the value of field deletedAt
     *
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Returns the value of field deprecated
     *
     * @return string
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Returns the value of field deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		parent::initialize();
        // $this->setSchema("zemit");
        $this->setSource("project");
        $this->hasMany('id', 'Zemit\Models\Base\Error', 'projectId', ['alias' => 'Error']);
        $this->hasMany('id', 'Zemit\Models\Base\Permission', 'projectId', ['alias' => 'Permission']);
        $this->hasMany('id', 'Zemit\Models\Base\ProjectChannel', 'projectId', ['alias' => 'ProjectChannel']);
        $this->hasMany('id', 'Zemit\Models\Base\ProjectEndpoint', 'projectId', ['alias' => 'ProjectEndpoint']);
        $this->hasMany('id', 'Zemit\Models\Base\ProjectLocale', 'projectId', ['alias' => 'ProjectLocale']);
        $this->hasMany('id', 'Zemit\Models\Base\Snapshot', 'projectId', ['alias' => 'Snapshot']);
        $this->hasMany('id', 'Zemit\Models\Base\Value', 'projectId', ['alias' => 'Value']);
        $this->hasMany('id', 'Zemit\Models\Base\WorkspaceProject', 'projectId', ['alias' => 'WorkspaceProject']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractProject[]|AbstractProject|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractProject|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'locale_id' => 'localeId',
            'name' => 'name',
            'slug' => 'slug',
            'description' => 'description',
            'meta' => 'meta',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
            'deprecated_at' => 'deprecatedAt',
            'deleted_at' => 'deletedAt',
            'deprecated' => 'deprecated',
            'deleted' => 'deleted'
        ];
    }

}
