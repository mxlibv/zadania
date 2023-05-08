{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link pure-button">wyloguj</a>
	
</div>

<div class='content'>
	<h2> Kalkulator kredytowy </h2>
	<form action="{$conf->action_url}calcCompute" method= "post" width="500px">
	<label for="id_x"> Kwota: </label> 
	<input id="id_x" type = "text" name="money" value="{$form->money}" />
	<br> 
	<label for="id_y"> Liczba lat: </label>
	<input id="id_y" type = "text" name="year"  value="{$form->year}" />
	<br>
	<label for="id_z"> Oprocentowanie (%): </label>
	<input id="id_z" type = "text" name="per"  value="{$form->per}"/>
	<br>
	<button type="submit" class="pure-button">Oblicz</button>
	<br> <br>
	
	</div>
{include file='messages.tpl'}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>
{/block}