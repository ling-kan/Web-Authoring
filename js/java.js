		$(function(){
		// Name the datagrid function to create a table - flexigrid

			$('#cartcontent').datagrid({
				singleSelect:true,
				showFooter:true
			});
			// Specifying whether the item is draggable

			$('.item').draggable({
				revert:true,
				proxy:'clone',
				onStartDrag:function(){
					$(this).draggable('options').cursor = 'not-allowed';
					$(this).draggable('proxy').css('z-index',10);
				},
				onStopDrag:function(){
					$(this).draggable('options').cursor='move';
				}
			});
			// Drop in cart section

			$('.cart').droppable({
				onDragEnter:function(e,source){
					$(source).draggable('options').cursor='auto';
				},
				onDragLeave:function(e,source){
					$(source).draggable('options').cursor='not-allowed';
				},
				onDrop:function(e,source){
					var name = $(source).find('p:eq(0)').html();
					var price = $(source).find('p:eq(1)').html();
					addProduct(name, parseFloat(price.split('£')[1]));
				}
			});
		});
		// Adding a new row for new products

		function addProduct(name,price){
			var dg = $('#cartcontent');
			var data = dg.datagrid('getData');
			function add(){
				for(var i=0; i<data.total; i++){
					var row = data.rows[i];
					if (row.name == name){
						row.quantity += 1;
						return;
					}
				}
				data.total += 1;
				data.rows.push({
					name:name,
					quantity:1,
					price:price
				});
			}
			add();
			dg.datagrid('loadData', data);
			var cost = 0;
			var rows = dg.datagrid('getRows');
			for(var i=0; i<rows.length; i++){
			// Calculating the cost

				cost += rows[i].price*rows[i].quantity;
			}
			// Reload the footer to update the total price

			dg.datagrid('reloadFooter', [{name:'Total £',price:cost}]);
		}
	