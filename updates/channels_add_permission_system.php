<?php namespace RainLab\Forum\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class ChannelsAddPermissionSystem extends Migration
{
    public function up()
    {
        Schema::table('rainlab_forum_channels', function($table)
        {
            $table->boolean('is_login_required')->default(0);
            $table->string('required_permission');
        });
    }

    public function down()
    {
        Schema::table('rainlab_forum_channels', function($table)
        {
            $table->dropColumn('is_login_required', 'required_permission');
        });
    }
}
