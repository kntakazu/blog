<?php

class Model_Post extends Model_Crud
{
   /**
   * 最低限のCRUD処理の実装 
   */

    // このモデルが扱うテーブル名
    protected static $_table_name = 'posts';
    // テーブルの主キー
    protected static $_primary_key = 'id';
}
