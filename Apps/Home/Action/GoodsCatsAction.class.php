<?php
 namespace Home\Action;;
/**
 * ============================================================================
 *   * ADD BY YANG
 * ============================================================================
 * 商品分类控制器
 */
class GoodsCatsAction extends BaseAction{
	/**
	 * 列表查询
	 */
    public function queryByList(){
		$m = D('Admin/GoodsCats');
		$list = $m->queryByList((int)I('id'));
		$rs = array();
		$rs['status'] = 1;
		$rs['list'] = $list;
		$this->ajaxReturn($rs);
	}
};
?>