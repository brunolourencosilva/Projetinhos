import { calcularMedia} from "./Media.js";

export function printTabela(media){
        printResultado('tableBody',`
          <tbody>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th>${calcularMedia(media)}</th>
              <th></th>
              <th></th>
              <th><button type="button" id="apagarDados">apagar</button>
                  <button type="button" id="alterarDados">alterar</button>
              </th>
            </tr>
          </body>`);
}
