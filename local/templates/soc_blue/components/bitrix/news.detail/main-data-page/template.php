<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>

<div class="main-data">
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $key=>$prop):?>
		<div class="prop-item prop-<?=$prop["CODE"]?>">
			<span class="prop-name">
				<?=$prop["NAME"]?>:
			</span>
			<?if($prop["CODE"] == "WORK_TIME"):?>
				<div class="prop-value">
					<div class="table table-grey">
						<div class="table-row">
							<?foreach($arResult["RESULT_MOD"]["WORK_TIME_ITEMS"] as $workDays):?>
								<div class="table-cell"><?=$workDays["UF_NAME"]?></div>
							<?endforeach?>
						</div>
						<div class="table-row">
							<?foreach($arResult["RESULT_MOD"]["WORK_TIME_ITEMS"] as $workTime):?>
								<div class="table-cell"><?=$workTime["UF_TIME"]?></div>
							<?endforeach?>
						</div>
						<div class="table-row">
							<?foreach($arResult["RESULT_MOD"]["WORK_TIME_ITEMS"] as $workInfo):?>
								<div class="table-cell">
									<?if($workInfo["UF_TIME"]):?>
										Перерыв
									<?else:?>
										Выходной
									<?endif?>
								</div>
							<?endforeach?>
						</div>
						<div class="table-row">
							<?foreach($arResult["RESULT_MOD"]["WORK_TIME_ITEMS"] as $restTime):?>
								<div class="table-cell"><?=$restTime["UF_REST_TIME"]?></div>
							<?endforeach?>
						</div>
					</div>
				</div>
			<?else:?>
				<span class="prop-value">
					<?=$prop["DISPLAY_VALUE"]?>
				</span>	
			<?endif?>
		</div>
	<?endforeach?>
</div>