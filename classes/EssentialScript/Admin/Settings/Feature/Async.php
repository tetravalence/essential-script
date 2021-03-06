<?php

/*
 * Copyright (C) 2017 docwho
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace EssentialScript\Admin\Settings\Feature;

/**
 * Concrete class that uses the template method to display the Async option.
 *
 * @author docwho
 */
class Async extends \EssentialScript\Admin\SettingsFeature {
	
	/**
	 * Includes the code that can be used to display the Async option.
	 * 
	 * @param string $feature Original value being filtered.
	 * @param string $state Additional param for checkbox state: enabled/disabled.
	 * @param array $option Array with boolean values to mark the input.
	 */
	protected function doFeature( $feature, $state, $option ) {
		$this->feature = $feature;
		$this->state = $state;
		$this->option = $option;
		$ischecked = checked( $this->option['async'], true, false );
		$this->feature .=<<<FEATURE
<ul><li><label for="async">
	<input type="checkbox" 
		id="async"
		name="essentialscript_options[filefeature][async]" %s %s>Async
	<span class="input-indicator">HTML5</span></label>
</li></ul>
FEATURE;
		$this->feature = sprintf($this->feature, $ischecked, $this->state );
	}
	
	
}
