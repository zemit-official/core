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
 * AbstractFlowAction
 * 
 * @package Zemit\Models\Base
 * @autogenerated by Phalcon Developer Tools
 * @date 2020-07-12, 19:34:00
 */
abstract class AbstractFlowAction extends \Zemit\Models\Base
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
     * @Column(column="flow_id", type="integer", length=10, nullable=false)
     */
    protected $flowId;

    /**
     *
     * @var integer
     * @Column(column="trigger_id", type="integer", length=11, nullable=true)
     */
    protected $triggerId;

    /**
     *
     * @var integer
     * @Column(column="transform_id", type="integer", length=10, nullable=true)
     */
    protected $transformId;

    /**
     *
     * @var integer
     * @Column(column="validation_id", type="integer", length=10, nullable=true)
     */
    protected $validationId;

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
     * @Column(column="deleted_at", type="string", nullable=true)
     */
    protected $deletedAt;

    /**
     *
     * @var string
     * @Column(column="deprecated_at", type="string", nullable=true)
     */
    protected $deprecatedAt;

    /**
     *
     * @var string
     * @Column(column="deleted", type="string", length=1, nullable=false)
     */
    protected $deleted;

    /**
     *
     * @var string
     * @Column(column="deprecated", type="string", length=1, nullable=false)
     */
    protected $deprecated;

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
     * Method to set the value of field flow_id
     *
     * @param integer $flowId
     * @return $this
     */
    public function setFlowId($flowId)
    {
        $this->flowId = $flowId;

        return $this;
    }

    /**
     * Method to set the value of field trigger_id
     *
     * @param integer $triggerId
     * @return $this
     */
    public function setTriggerId($triggerId)
    {
        $this->triggerId = $triggerId;

        return $this;
    }

    /**
     * Method to set the value of field transform_id
     *
     * @param integer $transformId
     * @return $this
     */
    public function setTransformId($transformId)
    {
        $this->transformId = $transformId;

        return $this;
    }

    /**
     * Method to set the value of field validation_id
     *
     * @param integer $validationId
     * @return $this
     */
    public function setValidationId($validationId)
    {
        $this->validationId = $validationId;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field flowId
     *
     * @return integer
     */
    public function getFlowId()
    {
        return $this->flowId;
    }

    /**
     * Returns the value of field triggerId
     *
     * @return integer
     */
    public function getTriggerId()
    {
        return $this->triggerId;
    }

    /**
     * Returns the value of field transformId
     *
     * @return integer
     */
    public function getTransformId()
    {
        return $this->transformId;
    }

    /**
     * Returns the value of field validationId
     *
     * @return integer
     */
    public function getValidationId()
    {
        return $this->validationId;
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
     * Returns the value of field deletedAt
     *
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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
     * Returns the value of field deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
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
     * Initialize method for model.
     */
    public function initialize()
    {
		parent::initialize();
        // $this->setSchema("zemit");
        $this->setSource("flow_action");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFlowAction[]|AbstractFlowAction|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractFlowAction|\Phalcon\Mvc\Model\ResultInterface
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
            'flow_id' => 'flowId',
            'trigger_id' => 'triggerId',
            'transform_id' => 'transformId',
            'validation_id' => 'validationId',
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
            'deleted_at' => 'deletedAt',
            'deprecated_at' => 'deprecatedAt',
            'deleted' => 'deleted',
            'deprecated' => 'deprecated'
        ];
    }

}