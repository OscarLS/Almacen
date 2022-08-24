<article class="alta">
					<table class="TablaP"> 
						<tr> <!-- Nombre -->
							<td class="lD"> Nombre: </td> <!-- Nombre -->
							<td class="lD"> Direccion: </td> <!-- Direccion -->
							<td class="lD" > Jurisdiccion: </td> <!-- Jurisdiccions -->
						</tr>
						<tr> 
							<td> <input type="text" class="input_2" name="nombre" placeholder="  Ingrese Nombre..." autocomplete="off"> </td> <!-- Nombre -->
							<td> <input type="text" class="input_1" name="direccion" placeholder="  Ingrese Direccion..." autocomplete="off"> </td> <!-- Direccion -->
							<td> <select name="jurisdiccion" id="jurisdiccion" class="input_2">
									<option value="----">--Seleccion jurisdiccion--</option>
									<option value="Valles centrales">Valles centrales</option>
									<option value="Itsmo">Itsmo</option>
									<option value="Tuxtepec">Tuxtepec</option>
									<option value="Costa">Costa</option>
									<option value="Mixteca">Mixteca</option>
									<option value="Sierra">Sierra</option>
								</select> 
							</td> <!-- Jurisdiccions --> 
						</tr> 
					</table>
					<input class="BTG" type="submit" value="Guardar">