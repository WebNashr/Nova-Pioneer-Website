<?php
class ReadMoreIncludeManager {

	private $data;
	private $id;
	private $toggleContent;
	private $rel;

	public function __call($name, $args) {

		$methodPrefix = substr($name, 0, 3);
		$methodProperty = lcfirst(substr($name,3));

		if ($methodPrefix == 'get') {
			return $this->$methodProperty;
		}
		else if ($methodPrefix == 'set') {
			$this->$methodProperty = $args[0];
		}
	}

	private function randomName($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}

	public function render() {
		$rel = 'yrm-'.$this->randomName(5);
		$this->setRel($rel);

		$data = $this->includeData();
		$data .= $this->includeScripts();

		return $data;
	}

	private function includeData(){

		$allContent = '';
		$data = $this->getData();
		$buttonData = $this->buttonContent();
		$accordionContent = $this->accordionContent();

		if(isset($data['vertical']) && $data['vertical'] == 'top') {
			$allContent = $buttonData.$accordionContent;
			return $allContent;
		}

		$allContent = $accordionContent.$buttonData;

		return $allContent;
	}

	private function accordionContent() {

		$rel = $this->getRel();
		$id = $this->getId();

		$content = $this->getToggleContent();
		return "<div class=\"yrm-content yrm-content-$id\" id='".$rel."' data-show-status='false'>$content</div>";
	}

	private function includeScripts() {

		$id = $this->getId();
		$savedData = $this->getData();
		$type = $savedData['type'];

		echo "<script>
			readMoreArgs[$id] = ".json_encode($savedData).";
		</script>";
		wp_register_script('readMoreJs', YRM_JAVASCRIPT.'yrmMore.js', array(), YRM_VERSION);
		wp_register_script('yrmMorePro', YRM_JAVASCRIPT.'yrmMorePro.js', array(), YRM_VERSION);
		wp_enqueue_script('readMoreJs');
		if(YRM_PKG > 1) {
			wp_register_script('yrmGoogleFonts', YRM_JAVASCRIPT.'yrmGoogleFonts.js');
			wp_enqueue_script('yrmGoogleFonts');
			wp_enqueue_script('yrmMorePro');
		}
		wp_register_style('readMoreStyles', YRM_CSS_URL."readMoreStyles.css");
		wp_enqueue_style('readMoreStyles');

		if($type == 'button') {

			wp_register_script('YrmClassic', YRM_JAVASCRIPT.'YrmClassic.js', array('readMoreJs'), YRM_VERSION);
			wp_enqueue_script('YrmClassic');
			echo "<script>
				jQuery(document).ready(function() {
					
					var obj = new YrmClassic();
					obj.id = $id;
					obj.init();
				});
			</script>";
		}
	}

	private function buttonContent() {

		$data = $this->getData();
		$id = $this->getId();
		$rel = $this->getRel();
		$more = $data['moreName'];

		$button = "<div class='yrm-btn-wrapper yrm-btn-wrapper-".$id."'>
			<span class='yrm-toggle-expand  yrm-toggle-expand-$id' data-rel='".$rel."'>
				<span class=\"yrm-button-text\">$more</span>
			</span>
		</div>";

		return $button;
	}
}