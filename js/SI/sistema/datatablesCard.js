class CardContClass {
	element;
	headers;
	items;
	copyItems;
	typeView;
	pagination;
	numberOfEntries;
	buttonAction;

	constructor(selector, buttonAction){
		this.element = document.querySelector(selector);
		this.headers = [];
		this.items = [];
		this.pagination = {
			total: 0,
			noItemsPerPage: 0,
			noPages: 0,
			actual: 0,
			pointer: 0,
			diff: 0,
			lastPagesBeforeDots: 0,
			noButtonsBeforeDots: 5
		}
		this.copyItems = [];
		this.typeView = 'table';
		this.numberOfEntries = 10;
		this.buttonAction = buttonAction;
	}
	parse(){
		const header = [...this.element.querySelector('thead tr').children];
		const trs = [...this.element.querySelector('tbody').children];

		header.forEach(element => {
			this.headers.push(element.textContent);
		});

		trs.forEach(element => {
			const row = [...element.children];
			const item = []
			row.forEach(element => {
				item.push(element.textContent);
			});
			this.items.push(item);
		});

		this.makeContent();
	}

	makeContent(){
		this.copyItems = [...this.items];
		this.initPagination(this.items.length, this.numberOfEntries);

		const container = document.createElement('div');
		container.id = this.element.id;
		this.element.innerHTML = '';
		this.element.replaceWith(container);
		this.element = container;

		this.createHtml();
		this.renderView();
		this.renderElements();
		this.renderPagesButtons();
		this.renderSelectEntries();
		this.renderSearch();
	}

	initPagination(total, entries){
		this.pagination.total = total;
		this.pagination.noItemsPerPage = entries;
		this.pagination.noPages = Math.ceil(this.pagination.total / this.pagination.noItemsPerPage);
		this.pagination.actual = 1;
		this.pagination.pointer = 0;
		this.pagination.diff = this.pagination.noItemsPerPage - (this.pagination.total % this.pagination.noItemsPerPage);		
	}

	createHtml(){
		this.element.innerHTML = `
			<div class="bar-opc-view">
				<!-- NUM ENTRIES -->
				<div class="contentNumEnt">
					<select name="n-entries" id="n-entries">
					</select>
				</div>
				<!-- PAGINACION -->
				<div class="contentPagination">
					<ul class="paginationCont">
					</ul>
				</div>
				<!-- BUSCAR -->
				<div class="contentSearch active">
					<input type="search" name="searchDataTable" id="searchDataTable" placeholder="Buscar..." autocomplete="off">
					<div class="icon">
						<i class="fal fa-search"></i>
					</div>
				</div>
				<!-- CONTENEDOR OPC VIEW -->
				<div class="contentOpcView">
					<label for="table" class="btn-opc-view active">
						<i class="fas fa-list"></i>
						<input type="radio" class="opc-view" name="opc-view" id="table" value="table" selected="true">
					</label>
					<label for="list" href="#" class="btn-opc-view">
						<i class="fas fa-th-list"></i>
						<input type="radio" class="opc-view" name="opc-view" id="list" value="list">
					</label>
					<label for="card" href="#" class="btn-opc-view">
						<i class="fas fa-th"></i>
						<input type="radio" class="opc-view" name="opc-view" id="card" value="card">
					</label>
				</div>
			</div>
			<div class="elements-container">
			</div>
			<div class="bar-opc-view bar-bottom">
				<!-- PAGINACION -->
				<div class="contentPagination paginationBottom">
					<ul class="paginationCont">
					</ul>
				</div>
			</div>`;
	}

	renderView(){
		const inputs = [...this.element.querySelectorAll('input[type="radio"].opc-view')];
		const label = [...this.element.querySelectorAll('label.btn-opc-view')];
		
		inputs.forEach(element => {
			element.addEventListener('change', e => {
				const id = e.target.id;
				$(label).removeClass('active');
				this.element.querySelector('label[for="'+id+'"]').classList.add('active');
				this.typeView = e.target.getAttribute('value');
				this.renderElements();
			});
		});
	}

	renderElements(){
		let content = '';
		switch(this.typeView){
			case 'table':
				content += `<table class="table-container">
								<thead>
									<tr></tr>
								</thead>
								<tbody></tbody>
							</table>`;
				this.element.querySelector('.elements-container').innerHTML = content;
				this.renderTable();
			break;
			case 'list':
				content += '<div class="list-container"></div>';
				this.element.querySelector('.elements-container').innerHTML = content;
				this.renderList();
			break;
			case 'card':
				content += `<div class="card-container"></div>`;
				this.element.querySelector('.elements-container').innerHTML = content;
				this.renderCards();
			break;
		}
	}

	renderCards(){
		this.element.querySelector('.card-container').innerHTML = '';

		let i = 0;
		let data = '';
		const {pointer, total} = this.pagination;
		const limit = this.pagination.actual * this.pagination.noItemsPerPage;

		for(i = pointer; i < limit; i++){
			if (i === total) break;
			const values = this.copyItems[i];
			data += `<div class="card">
							<div class="card-content">
								<h3>Detalles</h3>
								<ul>
									<li>C.C.: ${values[3]}</li>
									<li>Estado: ${values[4]}</li>
									<li>Creacion: ${values[5]}</li>
								</ul>
								<div class="card-cont-link">
									<a href="#" id="${values[3]}">Ver mas</a>
								</div>
							</div>
							<div class="card-details">
								<div class="image">
									<img src="http://localhost/project/img/SI/usuarios/usr1.png">
								</div>
								<h3>${values[1]}</h3>
								<span>${values[2]}</span>
							</div>
						</div>`;
		}

		this.element.querySelector('.card-container').innerHTML += data;
		this.element.querySelectorAll('.card-cont-link a').forEach(button => {
			button.addEventListener('click', this.buttonAction);
		});
	}

	renderList(){
		this.element.querySelector('.list-container').innerHTML = '';

		let i = 0;
		let data = '';
		const {pointer, total} = this.pagination;
		const limit = this.pagination.actual * this.pagination.noItemsPerPage;

		for(i = pointer; i < limit; i++){
			if (i === total) break;
			const values = this.copyItems[i];
			data += `<div class="list">
						<div class="list-img">
							<img src="http://localhost/project/img/SI/usuarios/usr1.png">
						</div>
						<div class="list-content">
							<p class="list-title">${values[1]} - ${values[2]}</p>
							<div class="list-info">
								<ul>
									<li>C.C.: ${values[3]}</li>
									<li>Estado: ${values[4]}</li>
									<li>Creación: ${values[5]}</li>
								</ul>
							</div>
						</div>
					</div>`;
		}

		this.element.querySelector('.list-container').innerHTML += data;
	}

	renderHeaders(){
		this.element.querySelector('thead tr').innerHTML = '';
		this.headers.forEach(header => {
			this.element.querySelector('thead tr').innerHTML += `<th>${header}</th>`;
		});
	}

	renderTable(){
		this.element.querySelector('tbody').innerHTML = '';
		this.renderHeaders();
		let i = 0;
		const {pointer, total} = this.pagination;
		const limit = this.pagination.actual * this.pagination.noItemsPerPage;

		for(i = pointer; i < limit; i++){
			if (i === total) break;
			let data = '';
			this.copyItems[i].forEach(cell => {
				data += `<td>${cell}</td>`;
			});
			this.element.querySelector('tbody').innerHTML += `<tr>${data}</tr>`;
		}
	}

	renderPagesButtons(){
		const pagesContainer = this.element.querySelector('.contentPagination');
		const pagesContainerBottom = this.element.querySelector('.paginationBottom');
		let pages = '';

		const buttonsToShow = this.pagination.noButtonsBeforeDots;
		const actualIndex = this.pagination.actual;

		let limI = Math.max(actualIndex - 2, 1);
		let limS = Math.min(actualIndex + 2, this.pagination.noPages);
		const missingButton = buttonsToShow - (limS - limI);

		if (Math.max(limI - missingButton, 0)) {
			limI = limI - missingButton;
		} else if (Math.min(limS + missingButton, this.pagination.noPages) !== this.pagination.noPages) {
			limS = limS + missingButton;
		}

		pages += `<li class="pageNumber">
					<button class="paginationPrev" data-page="${this.pagination.actual - 1? this.pagination.actual - 1:1}">
						<i class="fas fa-angle-left" data-page="${this.pagination.actual - 1? this.pagination.actual - 1:1}"></i>
					</button>
				</li>
				<li class="pageNumber">
					<button class="paginationPrevFirst" data-page="1">
						<i class="fas fa-angle-double-left" data-page="1"></i>
					</button>
				</li>`;
		if (limS < (this.pagination.noPages - 2)) {
			pages += this.getIteratedButton(limI, limS);
			pages += '<li>...</li>';
			pages += this.getIteratedButton(this.pagination.noPages - 1, this.pagination.noPages);
		} else {
			pages += this.getIteratedButton(limI, this.pagination.noPages);
		}
		pages += `<li class="pageNumber">
					<button class="paginationNextLast" data-page="${this.pagination.noPages}">
						<i class="fas fa-angle-double-right" data-page="${this.pagination.noPages}"></i>
					</button>
				</li>
				<li class="pageNumber">
					<button class="paginationNext" data-page="${this.pagination.actual + 1 < this.pagination.noPages? this.pagination.actual + 1:this.pagination.noPages}">
						<i class="fas fa-angle-right" data-page="${this.pagination.actual + 1 < this.pagination.noPages? this.pagination.actual + 1:this.pagination.noPages}"></i>
					</button>
				</li>`;

		pagesContainer.innerHTML = `<ul class="paginationCont">${pages}</ul>`;
		pagesContainerBottom.innerHTML = `<ul class="paginationCont">${pages}</ul>`;

		this.element.querySelectorAll('.paginationCont .pageNumber button').forEach(button => {
			button.addEventListener('click', e => {
				this.pagination.actual = parseInt(e.target.getAttribute('data-page'));
				this.pagination.pointer = (this.pagination.actual * this.pagination.noItemsPerPage) - this.pagination.noItemsPerPage;
				this.renderElements();
				this.renderPagesButtons();
			});
		});

		// BUSCAR
		this.element.querySelector('.contentSearch .icon').addEventListener('click', e => {
			this.element.querySelector('.contentSearch').classList.toggle("active");
			this.element.querySelector('#searchDataTable').focus();
		});
	}

	getIteratedButton(start, end){
		let res = '';
		for(let i = start; i <= end; i++){
			if (i === this.pagination.actual) {
				res += `<li class="pageNumber active"><span class="btn-page">${i}</span></li>`;
			} else {
				res += `<li class="pageNumber"><button data-page="${i}">${i}</button></li>`;
			}
		}
		return res;
	}

	renderSelectEntries(){
		const select = this.element.querySelector('#n-entries');
		const html = [5,10,25,50,100].reduce((acc, item) => {
			return acc += `<option value="${item}" ${this.numberOfEntries === item? 'selected':''}>${item}</option>`
		}, '');

		select.innerHTML = html;

		this.element.querySelector('#n-entries').addEventListener('change', e =>{
			const numberOfEntries = parseInt(e.target.value);
			this.numberOfEntries = numberOfEntries;

			this.initPagination(this.copyItems.length, this.numberOfEntries);
			this.renderElements();
			this.renderPagesButtons();
			// this.renderSearch();
		});
	}

	renderSearch(){
		this.element.querySelector('#searchDataTable').addEventListener('keydown', e => {
			const query = e.target.value.trim().toLowerCase();
			if(query === ''){
				this.initPagination(this.copyItems.length, this.numberOfEntries);
				this.renderElements();
				this.renderPagesButtons();
				return;
			}
			this.search(query);
			this.initPagination(this.copyItems.length, this.numberOfEntries);
			this.renderElements();
			this.renderPagesButtons();
		});
	}

	search(query){
		let res = [];
		this.copyItems = [...this.items];
		for(let i = 0; i < this.copyItems.length; i++){
			const row = this.copyItems[i];
			for(let j = 0; j < row.length; j++){
				const cell = row[j];
				if (cell.toLowerCase().indexOf(query) >= 0) {
					res.push(this.copyItems[i]);
					break;
				}
			}
		}
		this.copyItems = [...res];
	}
}