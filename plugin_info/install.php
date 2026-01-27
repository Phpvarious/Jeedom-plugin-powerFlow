<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */
require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

function powerFlow_install() {
	log::add('powerFlow', 'debug', '┌──:fg-success: powerFlow_install() :/fg:──');
	foreach (powerFlow::byType('powerFlow') as $powerFlow) {
		if ($powerFlow->getConfiguration('solar::color::0', null) != null) $powerFlow->setConfiguration('solar::0::color', $powerFlow->getConfiguration('solar::color::0'));
		$powerFlow->setConfiguration('solar::color::0', null);
		if ($powerFlow->getConfiguration('battery::color::charge', null) != null) $powerFlow->setConfiguration('battery::charge::color', $powerFlow->getConfiguration('battery::color::charge'));
		$powerFlow->setConfiguration('battery::color::charge', null);
		if ($powerFlow->getConfiguration('battery::color::discharge', null) != null) $powerFlow->setConfiguration('battery::discharge::color', $powerFlow->getConfiguration('battery::color::discharge'));
		$powerFlow->setConfiguration('battery::color::discharge', null);
		if ($powerFlow->getConfiguration('inverter::color::in', null) != null) $powerFlow->setConfiguration('inverter::text::in::color', $powerFlow->getConfiguration('inverter::color::in'));
		$powerFlow->setConfiguration('inverter::color::in', null);
		if ($powerFlow->getConfiguration('grid::color::sell', null) != null) $powerFlow->setConfiguration('grid::sell::color', $powerFlow->getConfiguration('grid::color::sell'));
		$powerFlow->setConfiguration('grid::color::sell', null);
		if ($powerFlow->getConfiguration('grid::color::buy', null) != null) $powerFlow->setConfiguration('grid::buy::color', $powerFlow->getConfiguration('grid::color::buy'));
		$powerFlow->setConfiguration('grid::color::buy', null);
		$powerFlow->save();
	}
	log::add(__CLASS__, 'debug', '└────────────────────');
}

function powerFlow_update() {
	log::add('powerFlow', 'debug', '┌──:fg-success: powerFlow_update() :/fg:──');
	foreach (powerFlow::byType('powerFlow') as $powerFlow) {
		if ($powerFlow->getConfiguration('solar::color::0', null) != null) $powerFlow->setConfiguration('solar::0::color', $powerFlow->getConfiguration('solar::color::0'));
		$powerFlow->setConfiguration('solar::color::0', null);
		if ($powerFlow->getConfiguration('battery::color::charge', null) != null) $powerFlow->setConfiguration('battery::charge::color', $powerFlow->getConfiguration('battery::color::charge'));
		$powerFlow->setConfiguration('battery::color::charge', null);
		if ($powerFlow->getConfiguration('battery::color::discharge', null) != null) $powerFlow->setConfiguration('battery::discharge::color', $powerFlow->getConfiguration('battery::color::discharge'));
		$powerFlow->setConfiguration('battery::color::discharge', null);
		if ($powerFlow->getConfiguration('inverter::color::in', null) != null) $powerFlow->setConfiguration('inverter::text::in::color', $powerFlow->getConfiguration('inverter::color::in'));
		$powerFlow->setConfiguration('inverter::color::in', null);
		if ($powerFlow->getConfiguration('grid::color::sell', null) != null) $powerFlow->setConfiguration('grid::sell::color', $powerFlow->getConfiguration('grid::color::sell'));
		$powerFlow->setConfiguration('grid::color::sell', null);
		if ($powerFlow->getConfiguration('grid::color::buy', null) != null) $powerFlow->setConfiguration('grid::buy::color', $powerFlow->getConfiguration('grid::color::buy'));
		$powerFlow->setConfiguration('grid::color::buy', null);
		$powerFlow->save();
	}
	log::add(__CLASS__, 'debug', '└────────────────────');
}
