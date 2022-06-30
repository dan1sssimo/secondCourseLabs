using System;
using System.Collections.Generic;
using System.Drawing;
using System.Text;

namespace SetLibrary
{
    public class GraphEdge
    {
        public GraphVertex ConnectedVertex { get; }

        public int EdgeWeight { get; }
        public Color Color { get; set; }

        public GraphEdge(GraphVertex connectedVertex, int weight)
        {
            ConnectedVertex = connectedVertex;
            EdgeWeight = weight;
            Color = Color.FromArgb(0, 0, 0);
        }
    }
}