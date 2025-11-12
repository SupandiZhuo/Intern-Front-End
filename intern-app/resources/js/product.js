
document.addEventListener('DOMContentLoaded', () => {

  const dt = $('#productsTable').DataTable({
    language: { url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/en-GB.json' },
    responsive: true,
    order: [[0, 'desc']],
    autoWidth: false,
    columnDefs: [
      { targets: 0, type: 'num' },                                     
      { targets: 2, render: $.fn.dataTable.render.number('.', ',', 0), className: 'text-end' },
      { targets: 3, type: 'num', className: 'text-end' } 
    ]
  });

 
  const modalEl = document.getElementById('productModal');
  const modal   = bootstrap.Modal.getOrCreateInstance(modalEl);

  
  $('#btnSaveProduct').on('click', () => {
    const nameEl  = document.getElementById('pName');
    const priceEl = document.getElementById('pPrice');
    const stockEl = document.getElementById('pStock');

    const name  = (nameEl?.value || '').trim();
    const price = parseFloat(priceEl?.value);
    const stock = parseInt(stockEl?.value, 10);

    if (!name || isNaN(price) || isNaN(stock)) {
      alert('Lengkapi Name, Price, dan Stock.');
      return;
    }

    const id = Date.now();
    const created = new Date().toISOString().slice(0,19).replace('T',' ');


    dt.row.add([id, name, price, stock, created]).draw(false);

    document.getElementById('productForm').reset();
    modal.hide();
  });
});
