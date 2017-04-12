<?php
/**
 * Created by PhpStorm.
 * User: roland.reinvald
 * Date: 12.04.2017
 * Time: 11:49
 */
//menüü objektide loomine
$menu = new template('menu.menu');
$item = new template('menu.item');
//sisu lisamine
//sql lause, mis saab menüü jaoks vajalikud andmed
$sql = 'SELECT content_id, title FROM content WHERE ' .
    'parent_id=' . fixDb(0) . ' AND show_in_menu=' . fixDb(1);
//päringu tulemuse saamine
$res = $db->getArray($sql);
//tulemuse sisu kontrollimine
if ($res != false) {
    foreach ($res as $page) {
        $item->set('name', $page['title']);
        //menüü elemendi lingi loomine
        $link = $http->getLink(array('page_id' => $page['content_id']));
        //lingi menüüsse lisamine
        $item->set('link', $link);
        //lingi objekti sisse lisamine
        $menu->add('items', $item->parse());
    }
}
//objekti sisu kontrollimine

$main_tmpl->add('menu', $menu->parse());
?>
