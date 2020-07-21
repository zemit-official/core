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
 * AbstractAuditDetail
 * 
 * @package Zemit\Models\Base
 * @autogenerated by Phalcon Developer Tools
 * @date 2020-07-12, 19:33:59
 */
abstract class AbstractAuditDetail extends \Zemit\Models\Base
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=20, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(column="audit_id", type="integer", length=20, nullable=false)
     */
    protected $auditId;

    /**
     *
     * @var string
     * @Column(column="model", type="string", length=255, nullable=false)
     */
    protected $model;

    /**
     *
     * @var string
     * @Column(column="table", type="string", length=60, nullable=false)
     */
    protected $table;

    /**
     *
     * @var integer
     * @Column(column="primary", type="integer", length=10, nullable=false)
     */
    protected $primary;

    /**
     *
     * @var string
     * @Column(column="event", type="string", length='afterCreate','afterUpdate','afterDelete','afterRestore', nullable=false)
     */
    protected $event;

    /**
     *
     * @var string
     * @Column(column="column", type="string", length=60, nullable=false)
     */
    protected $column;

    /**
     *
     * @var string
     * @Column(column="map", type="string", length=60, nullable=false)
     */
    protected $map;

    /**
     *
     * @var string
     * @Column(column="before", type="string", nullable=true)
     */
    protected $before;

    /**
     *
     * @var string
     * @Column(column="after", type="string", nullable=true)
     */
    protected $after;

    /**
     *
     * @var string
     * @Column(column="deleted", type="string", length=1, nullable=false)
     */
    protected $deleted;

    /**
     *
     * @var string
     * @Column(column="created_at", type="string", nullable=false)
     */
    protected $createdAt;

    /**
     *
     * @var integer
     * @Column(column="created_by", type="integer", length=10, nullable=true)
     */
    protected $createdBy;

    /**
     *
     * @var integer
     * @Column(column="created_as", type="integer", length=10, nullable=true)
     */
    protected $createdAs;

    /**
     *
     * @var string
     * @Column(column="updated_at", type="string", nullable=true)
     */
    protected $updatedAt;

    /**
     *
     * @var integer
     * @Column(column="updated_by", type="integer", length=10, nullable=true)
     */
    protected $updatedBy;

    /**
     *
     * @var integer
     * @Column(column="updated_as", type="integer", length=10, nullable=true)
     */
    protected $updatedAs;

    /**
     *
     * @var string
     * @Column(column="deleted_at", type="string", nullable=true)
     */
    protected $deletedAt;

    /**
     *
     * @var integer
     * @Column(column="deleted_by", type="integer", length=10, nullable=true)
     */
    protected $deletedBy;

    /**
     *
     * @var integer
     * @Column(column="deleted_as", type="integer", length=10, nullable=true)
     */
    protected $deletedAs;

    /**
     *
     * @var string
     * @Column(column="restored_at", type="string", nullable=true)
     */
    protected $restoredAt;

    /**
     *
     * @var integer
     * @Column(column="restored_by", type="integer", length=10, nullable=true)
     */
    protected $restoredBy;

    /**
     *
     * @var integer
     * @Column(column="restored_as", type="integer", length=10, nullable=true)
     */
    protected $restoredAs;

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
     * Method to set the value of field audit_id
     *
     * @param integer $auditId
     * @return $this
     */
    public function setAuditId($auditId)
    {
        $this->auditId = $auditId;

        return $this;
    }

    /**
     * Method to set the value of field model
     *
     * @param string $model
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Method to set the value of field table
     *
     * @param string $table
     * @return $this
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Method to set the value of field primary
     *
     * @param integer $primary
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * Method to set the value of field event
     *
     * @param string $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Method to set the value of field column
     *
     * @param string $column
     * @return $this
     */
    public function setColumn($column)
    {
        $this->column = $column;

        return $this;
    }

    /**
     * Method to set the value of field map
     *
     * @param string $map
     * @return $this
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Method to set the value of field before
     *
     * @param string $before
     * @return $this
     */
    public function setBefore($before)
    {
        $this->before = $before;

        return $this;
    }

    /**
     * Method to set the value of field after
     *
     * @param string $after
     * @return $this
     */
    public function setAfter($after)
    {
        $this->after = $after;

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
     * Method to set the value of field created_by
     *
     * @param integer $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Method to set the value of field created_as
     *
     * @param integer $createdAs
     * @return $this
     */
    public function setCreatedAs($createdAs)
    {
        $this->createdAs = $createdAs;

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
     * Method to set the value of field updated_by
     *
     * @param integer $updatedBy
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Method to set the value of field updated_as
     *
     * @param integer $updatedAs
     * @return $this
     */
    public function setUpdatedAs($updatedAs)
    {
        $this->updatedAs = $updatedAs;

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
     * Method to set the value of field deleted_by
     *
     * @param integer $deletedBy
     * @return $this
     */
    public function setDeletedBy($deletedBy)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Method to set the value of field deleted_as
     *
     * @param integer $deletedAs
     * @return $this
     */
    public function setDeletedAs($deletedAs)
    {
        $this->deletedAs = $deletedAs;

        return $this;
    }

    /**
     * Method to set the value of field restored_at
     *
     * @param string $restoredAt
     * @return $this
     */
    public function setRestoredAt($restoredAt)
    {
        $this->restoredAt = $restoredAt;

        return $this;
    }

    /**
     * Method to set the value of field restored_by
     *
     * @param integer $restoredBy
     * @return $this
     */
    public function setRestoredBy($restoredBy)
    {
        $this->restoredBy = $restoredBy;

        return $this;
    }

    /**
     * Method to set the value of field restored_as
     *
     * @param integer $restoredAs
     * @return $this
     */
    public function setRestoredAs($restoredAs)
    {
        $this->restoredAs = $restoredAs;

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
     * Returns the value of field auditId
     *
     * @return integer
     */
    public function getAuditId()
    {
        return $this->auditId;
    }

    /**
     * Returns the value of field model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Returns the value of field table
     *
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Returns the value of field primary
     *
     * @return integer
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Returns the value of field event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Returns the value of field column
     *
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Returns the value of field map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Returns the value of field before
     *
     * @return string
     */
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * Returns the value of field after
     *
     * @return string
     */
    public function getAfter()
    {
        return $this->after;
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
     * Returns the value of field createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Returns the value of field createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Returns the value of field createdAs
     *
     * @return integer
     */
    public function getCreatedAs()
    {
        return $this->createdAs;
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
     * Returns the value of field updatedBy
     *
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Returns the value of field updatedAs
     *
     * @return integer
     */
    public function getUpdatedAs()
    {
        return $this->updatedAs;
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
     * Returns the value of field deletedBy
     *
     * @return integer
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Returns the value of field deletedAs
     *
     * @return integer
     */
    public function getDeletedAs()
    {
        return $this->deletedAs;
    }

    /**
     * Returns the value of field restoredAt
     *
     * @return string
     */
    public function getRestoredAt()
    {
        return $this->restoredAt;
    }

    /**
     * Returns the value of field restoredBy
     *
     * @return integer
     */
    public function getRestoredBy()
    {
        return $this->restoredBy;
    }

    /**
     * Returns the value of field restoredAs
     *
     * @return integer
     */
    public function getRestoredAs()
    {
        return $this->restoredAs;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		parent::initialize();
        // $this->setSchema("zemit");
        $this->setSource("audit_detail");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAuditDetail[]|AbstractAuditDetail|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return AbstractAuditDetail|\Phalcon\Mvc\Model\ResultInterface
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
            'audit_id' => 'auditId',
            'model' => 'model',
            'table' => 'table',
            'primary' => 'primary',
            'event' => 'event',
            'column' => 'column',
            'map' => 'map',
            'before' => 'before',
            'after' => 'after',
            'deleted' => 'deleted',
            'created_at' => 'createdAt',
            'created_by' => 'createdBy',
            'created_as' => 'createdAs',
            'updated_at' => 'updatedAt',
            'updated_by' => 'updatedBy',
            'updated_as' => 'updatedAs',
            'deleted_at' => 'deletedAt',
            'deleted_by' => 'deletedBy',
            'deleted_as' => 'deletedAs',
            'restored_at' => 'restoredAt',
            'restored_by' => 'restoredBy',
            'restored_as' => 'restoredAs'
        ];
    }

}