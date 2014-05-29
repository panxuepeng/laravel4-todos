<?php
/**
 * 代办事项
 */
class Todo extends BaseModel
{
    /**
     * 数据库表名称（不包含前缀）
     * @var string
     */
    protected $table = 'todos';

    /**
     * 软删除
     * @var boolean
     */
    //protected $softDelete = true;

    /**
     * 模型对象关系：作者
     * @return object User
     */
    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}