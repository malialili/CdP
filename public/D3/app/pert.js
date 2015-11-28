loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
			{ id: 'node1', value: { label: '1 | 366 | 0' } },
			{ id: 'node2', value: { label: '2 | 397 | 397' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'aaaa[366]' } },
			{ u: 'node1', v: 'node2', value: { label: 'eeee[31]' } },
		 ]
	}
);