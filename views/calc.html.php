
<section class="section">
  <form class="border">
    <div class="row">
      <div class="input-field col s12 m6">
        <select>
          <option value="">Alegeti optiunea</option>
          <option value="casnic">Casnic</option>
          <option value="agent">Agent Economic</option>
        </select>
        <label>Categorie consumator</label>
      </div>
    </div>
  </form>
</section>

<h4>Casnic</h4>
<section class="section">
  <form class="border">
    <div class="row">
      <div class="col s12">
        <div class="input-field col s12 m6">
          <select>
            <option value="">Alegeti optiunea</option>
            <option value="1">Zona 1</option>
            <option value="2">Zona 2</option>
            <option value="3">Zona 3</option>
          </select>
          <label>Zona de distribuție</label>
        </div>

        <div class="input-field col s12 m6">
          <div class="tooltip">
            Selectați zona în care este amplasat locul de consum
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="input-field col s12 m6">
          <input id="last_name" type="number" class="validate">
          <label for="last_name">Consum aproximativ - kWh</label>
        </div>
        <div class="input-field col s12 m6">
          <div class="tooltip">
            Introduceti consumul de energie electrica pentru care doriti sa se determine valoarea facturii
          </div>
        </div>
      </div>
    </div>
  </form>
</section>


<section>
  <table class="bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Item Name</th>
        <th>Item Price</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>$0.87</td>
      </tr>
      <tr>
        <td>Alan</td>
        <td>Jellybean</td>
        <td>$3.76</td>
      </tr>
      <tr>
        <td>Jonathan</td>
        <td>Lollipop</td>
        <td>$7.00</td>
      </tr>
    </tbody>
  </table>

</section>

<!--
<section class="section">
  <div class="row">
    <div class="col s12">
      <div class="input-field col s12 m6">
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Nivel tensiune</label>
      </div>
      <div class="input-field col s12 m6">
        <div class="tooltip">
          Selectați nivelul de tensiune al rețelei la care este racordat locul de consum
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <div class="input-field col s12 m6">
        <input id="last_name" type="number" class="validate">
        <label for="last_name">Număr de zile</label>
      </div>
      <div class="input-field col s12 m6">
        <div class="tooltip">
          Introduceți numărul de zile pentru care doriți să se facă calculul
        </div>
      </div>
    </div>
  </div>

</section>
-->
<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>